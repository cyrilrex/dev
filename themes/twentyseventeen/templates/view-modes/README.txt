This directory is used to store template files for view modes - irrespective of
the content type.

Example usage: if all content types have a view mode of teaser, and the layout
of teasers is the same for all content types, we use a template in this
directory.

All files in this directory should have a file name structure such as

node--[view-mode].html.twig (node--teaser.html.twig)

Templates for content types are stored in the content-types directory.

You can get default templates to work with/override from the 'Classy' theme's
templates folder - /core/themes/classy/templates

When creating templates for view modes make sure you add in all the fields that
might be need (wrapped in 'if' statements - we only want to load what is going
to be used on a page).

An example of the above might include:
News and Events have the exact same fields and layout, except events also has
a date field. In the template we might create something like this:

// Check that at least one of these fields has content. If so, print this div.
  {% if (field.title.content) or (field.event_date.content) or (field.main_image.content) or (field.body.content) %}
    <div class="mark-got-a-class-in-here">
      {% if field.title.content %}
        {{ field.title.content }}
      {% endif %}
      {% if field.event_date.content %}
        {{ field.event_date.content }}
      {% endif %}
      {% if field.main_image.content %}
        {{ field.main_image.content }}
      {% endif %}
      {% if field.body.content | summary %}
        {{ field.body.content | summary }}
      {% endif %}
    </div>
  {% endif %}

// Excuse the above code, it's just random 'off the top of my head' stuff. I'd
be surprised if it actually works in a Drupal theme!
