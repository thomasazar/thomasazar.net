# thomasazar.net

## My personal website, made with [Hugo](https://gohugo.io)

This is the repository for my personal website at [thomasazar.net](https://www.thomasazar.net). It's been through several iterations and designs over the years, with numerous backends ranging from hand-coding every page to WordPress to [Hugo](https://gohugo.io), which is what I currently use to build the site. As I became more familiar with Hugo, I have refined the code on the site. You may find cruft and odd bits that could stand to be further improved and refined.

## Structure

The site adheres to Hugo's conventional structure, with post content in `content`, layouts for each page type in `layouts`, and assets like Sass and JavaScript in `assets`. I utilize Hugo's asset pipelining features to convert SCSS to CSS, concatenate CSS and JS files into one file respectively, minify those files, then serve them with a SHA-256 fingerprint. All of that is to say, I can write new SCSS or JS, and Hugo will update the files as needed.

### Assets

Item in the `assets` directory and built by Hugo, which means there is no need for task runners like Gulp or Grunt. A simple `hugo` will build everything that needs building. Even though there is an `images` directory there, I'm currently using Cloudinary to serve images. Once it's set up, it's fairly convenient, especially since it offloads image processing, which is a CPU bottleneck for a small DigitalOcean droplet.

### Content

Each page is a Markdown file under the appropriate directory (called "sections" in Hugo-speak). The Media pages make use of some front-matter YAML, but otherwise it's mostly just plain ol' Markdown for content.

### Layouts

This is where the HTML goes. It probably needs to be cleaned up and made less redundant, so it's kinda always a work-in-progress.

### Resources

These are generated automatically by Hugo. I include them in the repo because my home computer is much more powerful than the droplet I use to build and deploy the site. So by committing the generated resources, I drastically cut down on the build time.

### Static

Assets that don't really change, like fonts, logos, and PDFs.

## Build and deploy

After a commit in pushed to the `production` branch, a Github webhook is triggered, sending a notification to my personal build server. The repo is then pulled, Hugo is called with `hugo --gc --minify`, and the site is deployed to Netlify.
