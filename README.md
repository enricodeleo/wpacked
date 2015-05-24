![WPacked Logo](logo.png)

#WPacked

## Background

I really like developing using the Node.js-ecosystem. I love to make my projects modular with npm and bower, I adore the easy dependency management. 
The thing I like the most is that I can start working immediately on my local machine without a full fledged webserver. 
Of course there are tools that give you quickly(sh) a development server within your machine, but all of them need Vagrant and is quite an overkill.

I also like the idea of just dropping a project on a webserver when I'm done (almost impossible with MySQL). 

Since I'm a huge WordPress fan, I tried to reproduce a similar flow with my favorite CMS, so here we are: my attempt to make WordPress as a self contained, _packaged application_ as possible. Hope you enjoy it ;)

## Key features

* Git-friendly
* Dependency management via [Composer](https://getcomposer.org/)
* Deployable and versionable DB thanks to [SQLite Integration](https://wordpress.org/plugins/sqlite-integration/) (WordPress Plugin)

## Requirements

* A Unix-like OS
* PHP >= 5.4
* Composer
* SQLite

## Requirements installation

### OS X 

#### Quick, built-in solution

You already have php and SQLite installed on your machine  

#### My favorite 

The best way to get all the requirements is _Homebrew_. 
If you haven't it yet, well you should. Follow the instructions [on the Homebrew's official website](http://brew.sh/).

There's a project that let you install all the php-related stuffs with ease: [Homebrew php](https://github.com/Homebrew/homebrew-php). Get it typing on your terminal:

```bash
$ brew tap homebrew/dupes
```

```bash
$ brew tap homebrew/versions
```

```bash
$ brew tap homebrew/homebrew-php
```

Then install the php version of your choice with

```bash
$ brew install php56
```

You'll need also Composer, so let install it:

```bash
brew install composer
```

#### Optional

Optional but suggested [wp-cli](https://github.com/wp-cli/wp-cli). It'll speed up several operations giving you the possibility to issue commands to WordPress via terminal.
This repo has a wp-cli.yml that automatically will point wp-cli to the actual wordpress directory, you just need to use the `wp` command inside the project directory.

```bash
brew install wp-cli
```

### Linux

- todo, feel free to pull request -

## Usage

Now the reason of the all thing: instant development. Just two commands.   

Clone this repo and type 

```bash
composer install
```

in order to install all the dependencies of the project. **You are already done**, just launch the php's built-in server with

```bash
php -S localhost:3000 -t app/
```

## Deploy :zap:

Thanks to SQLite DB the project itself is a self-contained package. You can just upload it to your server and point the webserver of your choice to `/path/to/project/app`.
