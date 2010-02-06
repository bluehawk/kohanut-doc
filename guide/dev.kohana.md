# Integrating with Kohana Controllers

Intregrating your other Kohana Controllers with Kohanut is easy, thanks to the awesome HMVC of Kohana 3 you can just send a sub-request.  If you are only doing one or two pages, a sub-request will probably be faster and easier, but if you are integrating alot of controllers and actions, you will want to override the content.

## Using a sub-request

Simply create an element of the page of the type "Request" and then put the url of the request.  That's it!

You will probably want to add this to the controller, so people can't access it directly, Kohanut should catch the exception and display the 404 page.

    if ($this->request != Request::instance())
	{
        throw new Kohana_Exception(404,"Not found");
    }
	
## Overriding Content

Kohanut allows you to tell it to display a page from the database, but then display your own content instead of what was on the page.  So in a sense you are taking an existing page, overriding the content, and then displaying that.

To do it, call `Kohanut::override($layoutname, $pageurl, $content)`.  Kohanut will find and render the layout with name `$layoutname` and mark `$pageurl` as the active page in the navs.  `$pageurl` **must actually be a page in the database** or the navigations can't draw correctly.  `$content` should be an array, with each element being put in a `content_area()`

	Kohanut::override('Two Column','/clients',array(
		"This will be put in content area 1.",
		"You could load a view or do a subrequest or something here if you wanted"
	));
	
[!!] This was called `Kohanut::render()` in 0.5.0