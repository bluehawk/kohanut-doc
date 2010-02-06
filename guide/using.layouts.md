# Layouts

Layouts use Twig to assemble themselves, the layouts do not use markdown, as they should contain no content.  Here is an example layout:

~~~
{{ Kohanut.stylesheet('default.css') }}

<div id='wrapper'>
	<div id='header'>
		{{ Kohanut.element('snippet','header') }}
	</div>
	<div id='navigation'>
		<div id='menu'>
			{{ Kohanut.main_nav(2) }}
		</div>
		{{ Kohanut.bread_crumbs() }}
	</div>
	
	<div id='page'>
		<div id='content'>
			 {{ Kohanut.content_area(1,'Main Column') }}
		</div>
		<div id='sidebar'>
			 {{ Kohanut.secondary_nav() }}
			 {{ Kohanut.content_area(2,'Side Column') }}
		</div>
		<div style='clear:both;'></div>
	</div>
	{{ Kohanut.element('snippet','footer') }}
</div>
~~~

It includes the stylesheet that it needs, and then contains a couple of divs for layout, and includes some snippets for the header and footer.

It's important to put things like the header and footer in a snippet so if you have several layouts and you need to change the header, for example, it's all in one place and is an easy change.  **The layouts should only contain layout, not content**.

## The Kohanut Functions you may need: 

### `{{ Kohanut.content_area(id,'name') }}`

This is the most important function in the layout, it defines an area on a page for content.  The main area on a page should be area 1, then columns or other areas should come after that.  Ex:

    {{ Kohanut.content_area(1,'Main Column') }}

### `{{ Kohanut.main_nav(max_depth) }}`

This renders the primary navigation, up to a maximum of the max_depth passed.  Passing the max_depth is optional, it defaults to 2.

    {{ Kohanut.main_nav() }}

Or specify a max depth, if you don't want it to be 2:

    {{ Kohanut.main_nav(3) }}

### `{{ Kohanut.secondary_nav(max_depth) }}`

This renders the secondary navigation, up to a maximum of the max_depth passed.  Passing the max_depth is optional, it defaults to 2.

    {{ Kohanut.secondary_nav() }}
	
Or specify a max depth, if you don't want it to be 2:

    {{ Kohanut.secondary_nav(1) }}

### `{{ Kohanut.bread_crumbs() }}`

Draw the breadcrumbs, this will draw the current path to the page as a list, you are responsible for styling it.

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