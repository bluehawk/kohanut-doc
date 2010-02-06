# The Basics of Kohanut

Kohanut uses Markdown and Twig to help assemble the pages. Markdown is used to make writing the content fast and easy, even for people who have never done written HTML.  Twig is used to build the layout and assemble the pieces of the pages together.

If you have Enabled Twig for an element, than you can used the following Kohanut functions:

### `{{ Kohanut.element('type','name') }}`

Use this to include an element of a certain type by name.  Ex:

    {{ Kohanut.element('snippet','footer') }}

Would find the "footer" snippet and render it on the page.

### `{{ Kohanut.stylesheet('/path/to/file.css') }}`

This will include a css file. It will put a <link\> at the top of the page. Ex:

    <link type="text/css" href="/path/to/file.css" rel="stylesheet" /> 

### `{{ Kohanut.javascript('/path/to/file.js') }}`

This will include a js file. It puts a <script\> tag at the top of the page. Ex:

    <script type="text/javascript" href="/path/to/file.js"></script>

### `{{ Kohanut.meta('<meta name="something" value="something" />') }}`

Use this if you need to include some kind of meta tag in the head of the page

    <meta name="something" value="something" />

### `{{ Kohanut.render_stats() }}`

Use this to display an informative message about how long it took the page to render. Ex:

    Page rendered in 0.137 seconds using 2.83MB and 12 queries.