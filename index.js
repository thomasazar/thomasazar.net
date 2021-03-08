const fs      = require('fs');
const axios   = require('axios').default;
const slugify = require('slugify');
require('dotenv').config();

const directus = process.env.DIRECTUS_URL + '/items';
const collections = process.env.COLLECTIONS.split(',');
const fields = '?fields=' + process.env.FIELDS || '';

collections.forEach(collection => {
    axios.get(`${directus}/${collection}${fields}`)
    .then(res => {
        if (collection !== 'home') {
            res.data.data.forEach(item => {
                // Prep the file
                const slug = slugify(item.title, {lower: true}); // Create slug based on the post's title
                var location = file = 'content/';
                if (item.location) {
                    location += item.location + '/';
                    file = location + slug + '.md';
                    delete item.location;
                } else {
                    location += slug;
                    file = location + '/_index.md';
                }

                // Create directory structure if needed
                fs.mkdirSync(location, {recursive: true}, (err) => {
                    if (err) console.error('ERROR', err);
                });

                // Write the file
                fs.writeFile(file, JSON.stringify(item, null, 2), (err) => {
                    if (err) { console.error(err); }
                    else { console.log('Wrote file:', file); }
                });
            });
        }
    })
    .catch(err => {
        console.error(err.message);
    })
});
