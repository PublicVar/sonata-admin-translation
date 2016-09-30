This is an example of using translation with the Sonata Standard edition.

For the example, I removed the E-commerce bundle.

All the custom files can be found in the ApplicationAppBundle (src/Application/AppBundle)

## Example explanations

There are 2 entities **ParamName** and **ParamType**. The relation between **ParamType** to **ParamName** is **one to many**.

The **ParamName** must be translatable.

When user creates a **ParamType**, in the same form, he can create translable **ParamName**

## Bundles used for translation
* [Sonata Standard Edition](https://github.com/sonata-project/sandbox)
* [Alix Translation Form](http://a2lix.fr/bundles/translation-form/3.x.html)
* [A2lixI18nDoctrineBundle](https://github.com/a2lix/I18nDoctrineBundle)
