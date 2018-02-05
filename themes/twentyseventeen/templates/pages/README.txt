This directory is used to store template files for pages.

Usually we only need to have the global page.html.twig in this directory,
but if we need to have new regions declared or other layout mechanisms, we
can add a page.html.twig file here to correspond to it.

For example, if we wanted all pages in the /user/ path (user/login user/register user/1234)
to have a dedicated page layout, we could add a page.html.twig file here for that.

All files in this directory should have a file name structure such as

page--[identifier].html.twig (page--user.html.twig)

You can get default templates to work with/override from the 'Classy' theme's
templates folder - /core/themes/classy/templates
