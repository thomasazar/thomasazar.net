import DirectusSDK from '@directus/sdk-js';
import fs from 'node:fs';
import yaml from 'js-yaml';
import slugify from 'slugify';

const directus = new DirectusSDK();
directus.url = 'http://192.168.163.5:8055';

async function getData(collection, options = '') {
    return await directus.items(collection).read(options);
}

fs.mkdirSync('tmp/content/media', {recursive: true}, (err) => {
    if (err) throw err;
})

getData('pages')
.then(response => {
    response.data.forEach(item => {
        const title = (item.title === 'Home') ? '_index' : slugify(item.title, {lower: true});
        if (item.title === 'Home') delete item.menu;
        const file = (item.title === 'Media') ? 'media/_index.md' : title + '.md';
        const yaml_content = yaml.dump(item);
        const output = '---\n' + yaml_content + '---';

        fs.writeFile('tmp/content/' + file, output, (err) => {
            if (err) throw err;
        });
    });
})
.catch(error => {
    console.error(error.message);
});

getData('media_pages')
.then(response => {
    response.data.forEach(item => {
        const title = slugify(item.title, {lower: true});
        const file = title + '.md';
        const yaml_content = yaml.dump(item);
        const output = '---\n' + yaml_content + '---';

        fs.writeFile('tmp/content/media/' + file, output, (err) => {
            if (err) throw err;
        });
    });
})
.catch(error => {
    console.error(error.message);
});

// Write config.json from Settings collection
getData('settings')
.then(response => {
    var item = response.data;
    var settings = {};
    settings.title = item.title;
    settings.description = item.description;
    delete item.title;
    delete item.description;
    settings.params = item;

    // Write the file
    fs.writeFile('tmp/config.yml', yaml.dump(settings), (err) => {
        if (err) { console.error(err); }
    });
})
.catch(error => {
    console.error(error.message);
});