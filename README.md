# Buto-Plugin-GoogleSearch
Embed Google search engine on a page.
- Go to page https://programmablesearchengine.google.com/controlpanel/create?optin=true.
- Get your search engine id.
- Embed widget on a page.

## Example
````
type: widget
data:
  plugin: google/search
  method: form
  data:
    id: _my_google_search_engine_id_
````

## I18N
Your google search engine can have a specific language.
If this is in usage one should show different search engins depending on current site language.
Add this settings to your form widget.
````
settings:
  i18n:
    language: en
````





![Form](readme/form.png)


