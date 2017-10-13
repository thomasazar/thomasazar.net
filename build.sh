site='thomasazar.net'
basedir=`pwd`
sha256sum=`sha256sum _source/css/main.css | head -c 10`

cp ${basedir}/_source/css/main.css _source/css/${sha256sum}.css
sed -i "s/main.css/$sha256sum.css/" ${basedir}/_source/_includes/head.html

jekyll build -d ${basedir}/_publish/

rsync -az --delete --progress ${basedir}/_publish/ deploy@southcarolinatheatre.org:/var/www/${site}.jekyll/web/

rm -rf ${basedir}/_publish/
sed -i "s/$sha256sum.css/main.css/" ${basedir}/_source/_includes/head.html
rm ${basedir}/_source/css/${sha256sum}.css
