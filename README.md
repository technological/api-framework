# API Framework

This is a simple API framework that should help you get APIs and web services up and running for your PHP application.

## Roadmap

This is version 2 of the framework and currently in heavy development, but the roadmap is as follows:

- Router
- Sample controller for testing purposes
- Different response views (initially JSON and XML)
- Authentication options
    - HTTP basic authentication
    - OAuth
- Rate-limiting

There will be no model layer. This is by design.
This is so developers can use the framework in existing PHP applications, or implement their own preferred implementations, whether that be their own hard-crafted model classes or a fully-fledged ORM.

## Issues

Any suggestions or queries then feel free to tweet me at [@martinbean](http://twitter.com/martinbean).

If you have an issue with the framework, then feel free to create an [Issue](https://github.com/martinbean/api-framework/issues) on the repository page.
However, don‘t check out the **v2-wip** branch and then create an Issue saying it doesn’t work—as aforementioned it’s currently in heavy development!

## License

The API framework will be released under the [MIT License](http://opensource.org/licenses/MIT).