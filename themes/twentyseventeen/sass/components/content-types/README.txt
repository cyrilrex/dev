This directory is reserved for styling that is individual to specific content
types. We create one file per content type.

In general, we discourage styling by content type as it leads to a lot of
repetitive code when the same layout is used on more than one content type.

Instead, we like to styling based on view modes. This means we prefer

this:
.node-teaser {
  // CSS goes here;
}

to this:
.node-type-news.node-teaser {
 // CSS goes here;
}

Unless something is 100% specific to a specific content type, this folder could
be emtpy. If styling is specific to a field, please style it in the fields
directory. It it's specific to a paragraph bundle, please style it in the
paragraphs directory.
