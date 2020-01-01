# Shasta Chapter CNPS

https://shasta-cnps.org

## Prereqs

`docker` & `docker-compose`

## Dev Setup

0. Pull this repo
0. Grab a SQL dump from [cPanel](https://cpanel-box5485.bluehost.com/cpsess1052648888/3rdparty/phpMyAdmin/server_export.php?lang=en) and put it in `containers/mysql/initdb.d`
0. Run `docker-compose up`
0. Log in at `http://localhost:8080/wp-admin`

## Deployment

0. Dry run: `rsync -auvn --exclude-from .rsyncignore ./wp-content/ shastacn@162.241.217.132:/home3/shastacn/public_html/wp-content/`
0. If it looks good, run it without the `-n`!

## To-do & tech debt

0. Add syncing (download) instructions
0. Use composer to manage plugins
0. Move code in `functions.php` to site-specific plugin
