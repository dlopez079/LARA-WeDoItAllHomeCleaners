# LARA-WeDoItAllHomeCleaners

The objective of this project is to create a landing page for WeDoItAllHomeCleaners.  

## Getting Started

For this project, I will use the Laraval Framework, AlphineJS and TailwindCSS.  To begin, clone this project, add Laravel Framework, and include both AlphineJS and TailwindCSS packages.  

### Prerequisites

Clone the project

```
git clone git@github.com:dlopez079/LARA-WeDoItAllHomeCleaners.git
```

Add Laravel Framework using a docker image.

```
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs
```

Include TailwindCSS Package

```
npm install -D tailwindcss postcss autoprefixer
npx tailwindcss init
In your webpack.mix.js file, add tailwindcss as a PostCSS plugin.
Add the paths to all of your template files in your tailwind.config.js file.
Add the @tailwind directives for each of Tailwind’s layers to your ./resources/css/app.css file.
Run your build process with npm run watch.
Make sure your compiled CSS is included in the <head> then start using Tailwind’s utility classes to style your content.
```

Include AlphineJS

```
Include this in the head of your blade. <script src="//unpkg.com/alpinejs" defer></script>
```

## Running the tests

Will complete this section when I get to testing.

## Deployment

Use Vapor to deploy application to AWS.

## Built With

* [Laravel](https://laravel.com/docs/9.x) - The web framework used
* [AlphineJS](https://alpinejs.dev/) - JS CDN
* [TailwindCSS](https://tailwindcss.com/docs/guides/laravel) - CSS CDN

## Contributing

Please read [CONTRIBUTING.md](https://gist.github.com/PurpleBooth/b24679402957c63ec426) for details on our code of conduct, and the process for submitting pull requests to us.

## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/your/project/tags). 

## Authors

* **David Lopez** - *Initial work* - [David Lopez](https://github.com/dlopez079)

See also the list of [contributors](https://github.com/your/project/contributors) who participated in this project.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

## Acknowledgments

* Hat tip to anyone whose code was used
* Inspiration
* etc
