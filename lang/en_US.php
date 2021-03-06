<?php
$lang['nameimages']='Images';
$lang['namefiles']='Files';
$lang['namefile']='File';
$lang['deleteimage']='Delete Image';
$lang['deletefile']='Delete File';
$lang['Owner']='Owner';
$lang['CatalogItem']='Item Cataloger';
$lang['namepage']='Page';
$lang['Permissions']='Permissions';
$lang['Sub']='Sub -';
$lang['title_global_item_sort_order2'] = 'Item Sort Order';
$lang['title_global_items_per_page2']= 'Items Per Page';
$lang['title_global_category_recurse2'] = 'Display Behavior';
$lang['which_attributes'] = 'Which attributes should be shown in catalog';
$lang['navTab'] = ' | ';  

$lang['needpermission']='You need %s set to do that.';
$lang['friendlyname']='Cataloger';
$lang['admindescription']='Manage Catalog settings';
$lang['areyousure']='Are you sure you want to delete this %s?';
$lang['uniquecode']='Unique Code';
$lang['templatelist']='Sub-templates';
$lang['listtempl']='Manage Sub-templates';
$lang['title_upload'] = 'Upload';
$lang['title_field_type'] = 'Field Type';
$lang['title_select_values'] = 'Value';
$lang['title_item_tab']='Item Attributes';
$lang['title_category_tab']='Category Attributes';
$lang['title_printable_tab']='Printable Catalog Attributes';
$lang['title_item_image_tab']='Item Image Settings';
$lang['title_category_image_tab']='Category Page Settings';
$lang['title_printable_tab']='Printable Catalog Settings';
$lang['title_path_tab']='Paths';
$lang['title_delete']='Delete?';
$lang['title_file_tab']='Item File Settings';
$lang['title_image_tab']='Other Image Settings';
$lang['title_item_template_vars'] = 'Item Template Variables';
$lang['title_cat_template_vars'] = 'Category Template Variables';
$lang['title_catalog_template_vars']='Catalog Template Variables';
$lang['title_compare_template_vars']='Comparison Template Variables';
$lang['title_feature_template_vars']='Feature list Template Variables';
$lang['title_show_only_existing_images']='Don\'t include missing images';
$lang['title_show_only_existing_images_help']='This will only put image references into lists if the image exists.<br />(Normally, this is fine, but if you are doing something clever with image<br />array indexes, this could cause you trouble.)';
$lang['title_flush_cats']='Flush category page buffers';
$lang['title_flush_cats_help']='If you have a huge number of items displayed<br />in a category, some PHP installs will fail to display the page<br />correctly. Check this box to solve this problem (test for side effects).';
$lang['title_item_file_types']='Permitted file types';
$lang['title_image_upload_path']='Location for uploaded image files';
$lang['title_file_upload_path']='Location for other uploaded item files';
$lang['title_image_proc_path']='Location for processed images (thumbnails, scaled images, etc)';
$lang['path_help']='You can specify where Cataloger stores files. These paths are relative to the <i>uploads_path</i> defined in your config.php<br />NOTE: If you change these paths after files or images have been uploaded, Cataloger will lose the already-uploaded assets (they will still be there, but Cataloger will not know about them, so you will need to re-upload them for Cataloger to figure it out).';

$lang['cataloger']='Cataloger';

$lang['title_attr_order_by']='Order';
$lang['title_attr_alias']='Attribute Alias (Smarty Friendly)';
$lang['title_attr_length']='Length*';
$lang['title_attr_default']='Default Value';
$lang['title_attr_length_help']='*Length only applies to "Text"<br />Value is a comma-delimited list of options for Dropdowns<br />Value should contain the checked value, a comma, and the unchecked value for checkbox';

$lang['text'] = 'Text';
$lang['dropdown'] = 'Dropdown';
$lang['textarea'] = 'Text Area';
$lang['checkbox'] = 'Checkbox';

$lang['tab_advanced_options'] = 'Cataloger Adv. Opts';
$lang['tab_fields_list'] = 'Cataloger Fields List';
$lang['tab_images'] = 'Cataloger Images';
$lang['tab_files'] = 'Cataloger Files';


$lang['item_page'] = 'Item Page';
$lang['category_page'] = 'Category Page';
$lang['catalog_printable'] = 'Printable Catalog';
$lang['catalog_datasheet'] = 'Catalog Datasheet';
$lang['catalog_short_list']='Feature List';
$lang['item_comparison'] = 'Item Comparison';

$lang['title_global_item_sort_order'] = 'Set item sort order to';
$lang['title_global_items_per_page']= 'Set number of items per page to';
$lang['title_global_category_recurse'] = 'Set Category Display Behavior to';

$lang['title_item_sort_order'] = 'Default item sort order';
$lang['title_printable_sort_order'] = 'Default printable catalog sort order';
$lang['title_items_per_page']= 'Default number of items per page';
$lang['title_avail_attrs'] = 'Item attributes available for the template';
$lang['title_avail_imattrs'] = 'Item images available for the template';
$lang['title_item_image_size_hero'] = 'Image size for Item Page (long axis in pixels)';
$lang['title_item_image_size_thumbnail'] = 'Thumbail image size for Item Page (long axis in pixels)';
$lang['title_item_image_size_category'] = 'Thumbnail image size for Item on Category Page (long axis in pixels)';
$lang['title_item_image_size_catalog'] = 'Thumbnail image size for Item on Catalog Page (long axis in pixels)';
$lang['title_category_image_size_hero'] = 'Image size for Category Page (long axis in pixels)';
$lang['title_category_image_size_thumbnail'] = 'Thumbail image size for Category Page (long axis in pixels)';
$lang['title_template']='Template';
$lang['title_template_type']='Template Type';
$lang['title_title']='Title';
$lang['title_item_image_count']='Maximum number of views for each Item';
$lang['title_item_file_count']='Maximum number of other files associated with each item';
$lang['title_category_image_count']='Maximum number of Banner images for each Category Page';
$lang['title_item_attributes_help']='Each attribute you enter here will be the title of a field that you can use to describe an individual item, and will be displayed with that item. You may have to update your template to reflect these attributes.';
$lang['title_category_attributes_help']='Each attribute you enter here will be the title of a field that you can use to describe an item category, and will be displayed on that category page. You may have to update your template to reflect these attributes.';
$lang['title_catalog_attributes_help']='Each attribute you enter here will be the title of a field that you can use to describe the entire catalog, and will be displayed on the printable catalog page. You may have to update your template to reflect these attributes.';
$lang['title_category_sort'] = 'Category Page Item-list sort order';
$lang['title_category_recurse'] = 'Default Category Display Behavior';
$lang['title_category_recurse_items_all'] = 'Include all Items within this category, including items in sub-categories';
$lang['title_category_recurse_items_one'] = 'Include all Items immediately within this category, but not items in sub-categories';
$lang['title_category_recurse_categories_all'] = 'Include all Categories within this category, including categories in sub-categories';
$lang['title_category_recurse_categories_one'] = 'Include all Categories immediately within this category, but not categories in sub-categories';
$lang['title_category_recurse_mixed_all'] = 'Include all Items and Categories within this category, including items and categories in sub-categories';
$lang['title_category_recurse_mixed_one'] = 'Include all Items and Categories immediately within this category, but not items or categories in sub-categories';
$lang['title_show_missing_images'] = 'Show "No Image" image for missing images';
$lang['title_show_missing_images_long'] = 'Show a special "No Image" image if there are missing images (useful for debugging. Otherwise will use a single pixel transparent image).';
$lang['natural_order'] = 'Navigation Order';
$lang['alpha_order'] = 'Alphabetical Order';

$lang['manageprefs']='Manage Preferences';
$lang['manageattrs']='Manage User-Defined Attributes';
$lang['globalops']='Global Catalog Operations';
$lang['addtemplate']='Add a new Sub-template';
$lang['reimporttemplates']='Re-import example sub-templates';
$lang['reimported'] = 'Sample sub-templates have been imported.';
$lang['templateupdated']='Template added/updated.';
$lang['templatedeleted']='Template deleted.';
$lang['prefsupdated']='Preferences updated.';
$lang['installed'] = 'Module version %s installed.';
$lang['upgraded'] = 'Module upgraded to version %s.';
$lang['badfile'] = 'File "%s" is not an acceptable format.';
$lang['badimage'] = 'Problem uploading "%s" (check file size and/or server permissions).';
$lang['badimageformat'] = '"%s" is not valid. Only jpegs are supported for the time being.';
$lang['uploaded'] = 'File "%s" uploaded for item %s.';
$lang['uninstalled'] = 'Module Uninstalled.';
$lang['attrsupdated'] = 'Attributes updated.';
$lang['noglobalchange'] = 'Do not change';
$lang['globallyupdated'] = 'Changes propagated globally.';
$lang['addtemplate'] = 'Add Template';
$lang['edittemplate'] = 'Edit Template';
$lang['subtemplates'] = 'Catalog Sub-templates';
$lang['next'] = ':&#187;';
$lang['prev'] = '&#171;:';
$lang['edit'] = 'Edit';
$lang['delete']='Delete';
$lang['notemplates']='No Sub-templates are installed!';

$lang['helptext']='
<h3>What Does This Do?</h3>
<p>This module lets you create online catalogs or portfolios. Catalogs consist of "Catalog Items" which could be products, works of art, or the like, and "Catalog Categories" which could be item categories or other natural divisions of the catalog.</p>
<p>Categories may be defined hierarchically (using the standard CMS Made Simple content list). Category pages can display items in the category and/or subcategories, optionally recursing through sub-categories. This behavior can be configured on a per-category basis.</P>
<p>There is also a Printable Catalog, which represents the whole collection of Catalog Items on a single page (this is currently implemented badly, and will load slowly).</p>
<p>The module has built-in support for "Content Aliases" (a module available at <a href="http://dev.cmsmadesimple.org/projects/contentaliases/">the Developer Forge</a>), which allows you to place any Catalog Item into multiple Catalog Categories.</p>
<h3>How Do I Use It</h3>
<p>When you install this module, it creates three new Content Types: Catalog Item, Catalog Category, and Printable Catalog. When you\'re in your site administration category, you add Catalog Items and Catalog Categories just as you would any other kind of page. Select Content &gt; Pages &gt; Add Content, and then select "Catalog Item" or "Catalog Category" from the Content Type pulldown.</p>
<h4>Catalog Items</h4>
<p>Adding a Catalog Item is similar to adding an ordinary page to your site. The data fields for the Item are not exactly the same, however. Also note that in the "Images" tab, you can select multiple images to upload for the item. When you upload images, the system will size them appropriately for the catalog, create thumbnails for use in the Item\'s page, create thumbnails for any Category pages, and so on. This requires that you have GD or a similar image library installed. Currently, only jpeg format images are supported.</p>
<h4>Catalog Categories</h4>
<p>A Catalog Category is used for organizing your catalog items. It provides a page that lists Cataloger content that is contained by it. A Catalog Item is considered to be part of a Catalog Category if it is below that Category in the Site Hierarchy. Categories can similarly include other Categories.</p>
<p>Catalog Categories have a number of settings to determine how they should display the Items and Categories they contain: if you look at the "Options" tab, you can choose how many items and/or categories to show, what order to show them in, whether to display only items or only categories or both, and how many levels of the hierarchy to display below the category page.</p>
<p>For example, consider the following structure:</p>
<ol>
	<li><b>Hats</b>
		<ol>
			<li><b>Fashion</b>
			 	<ol>
			 		<li>Feathered Hat</li><li>Fedora </li><li>Baseball Hat</li>
			 	</ol>
			 </li>
		 	<li><b>Work Hats</b>
		    	<ol>
		    		<li>Hard Hat</li><li>Diving Helmet</li>
		    	</ol>
		    </li>
		</ol>
	</li>
</ol>
<p>In this diagram, bolded items are Catalog Categories, and non-bolded items are Catalog Items. Depending upon how you set your options, the Hats Category Page can show only entries for the Fashion and Work Hats Category Pages, or it can show entries for Fashion, Work Hats, and all the hats listed below them.</p>
<p>You can opt to show the items in "natural" order (i.e., the order the Items show up in the CMS Content Hierarchy), or in alphabetical order.</P>
<p>If you have large numbers of items in a Category, you can set the maximum number to be displayed in a Category Page, and the page will automatically create links to navigate through the list.</p>
<p>Each Category page can have different settings for sort order, levels to display, and number of items. You can set the default for these values in Extensions &gt; Cataloger &gt; Manage Preferences. If, at a later date, you wish to change some setting on all of your Category pages, you can go into Extensions &gt; Cataloger &gt; Global Catalog Options, and make those changes.</p>
<h4>Images</h4>
<p>Cataloger allows you to select different size images for Item pages, Category pages, and the Printable Catalog. You can set these defaults in Extensions &gt; Cataloger &gt; Manage Preferences.</p>
<p>When you upload images, the original is stored. When someone visits a page, the reduced size images are requested using a special URL, which will redirect the user\'s browser to the scaled image if it exists, and creating the scaled image if it doesn\'t. This allows you to change the size of images, without having to re-upload all the images, or rescaling them all at once.</p>
<p>This image rescaling code requires that you have either ImageMagick or GD lib installed, and configured in your CMS Made Simple config.php.</p>
<h4>Files</h4>
<p>Cataloger allows you to associate arbitrary files with any Item page. These are uploaded via the admin, just like images. There
have been rudimentary security considerations (e.g., file-extension-based restrictions), however, as with any file upload
capability that puts files inside the web root, if you do not trust your uploaders, you are at some degree of risk. You have been warned.</p>
<h3>Feature Lists</h3>
<p>You can, as of version 0.4, have "feature lists" which are the <i>n</i> most-recently added catalog items, or a collection of <i>k</i> random items from the catalog.</p>
<h4>"All" Feature List</h4>
<p>To get a list of all catalog items (optionally under a specified part of your hierarchy) for processing via a template, you can use
the "all" feature list.</p>
<p>The syntax for an "all" list is like:</p>
<p>&#123;Cataloger action=\'all\' sub_template=\'my_sub_template\'}, where sub_template is the template to use to render the list.
There is an optional parameter, alias=\'page_alias\', where page_alias indicates the top of the tree (e.g., a place in your menu
hierarchy, typically a category page) in which to look for new items. A special value for "page_alias" is "/", which means to
start at the root.</p>
<p>This is useful for catalog-wide operations. For example, to get a list of all categories (and do something with them),
you could use the tag &#123;Cataloger action=\'all\' sub_template=\'my_sub_template\' alias=\'/\' recurse=\'categories_all\'}. Your template could then throw
those categories into a pulldown menu that redirected you to that category\'s page, for example:</p>
<pre>
&lt;select name="foo" onchange="document.location=this.options[this.selectedIndex].value;">
&lt;option value="">Select A target&lt;/option>
&#123;foreach from=$items item=thisone}
   &lt;option value="&#123;$thisone.link}">&#123;$thisone.title}&lt;/option>
&#123;/foreach}
&lt;/select>
</pre>
<p>If you wanted that to only show categories that were in the very top level of your hierarchy, you\'d replace the recurse=\'categories_all\' with
recurse=\'categories_one\'. Or if you wanted it to be all catalog Items instead of categories, you could use a tag like:
&#123;Cataloger action=\'all\' sub_template=\'my_sub_template\' alias=\'/\' recurse=\'items_all\'}
<p>Similarly, you could have it list only categories under the current page (by omitting the "alias=\'/\'"). The combinations are basically limitless!</p>
<p>All supported values of recurse include:<ul>
<li>items_one - Catalog items, no more than one level below the current page (or alias point)</li>
<li>items_all - Catalog items, at any level below the current page (or alias point)</li>
<li>categories_one - Categories, no more than one level below the current page (or alias point)</li>
<li>categories_all - Categories, at any level below the current page (or alias point)</li>
<li>mixed_one - Catalog items and Categories, no more than one level below the current page (or alias point)</li>
<li>mixed_all - Catalog items and Categories, at any level below the current page (or alias point)</li>
</ul>
</p>
<p>Items in these lists come back in hierarchy order. You can change this using the \'global_sort\' parameter. Your choices are:</p>
<ul>
<li>alpha - alphabetically by title</li>
<li>date - in order of item creation date</li>
<li>mdate - in order of item modification date</li>
</ul>
<p>You may order these sorts using the \'global_sort_dir\' parameter, which will allow \'asc\' or \'desc\'.</p>
<p>So, for a thorough example:</p>
<p>&#123;Cataloger action=\'all\' sub_template=\'my_sub_template\' alias=\'/\' recurse=\'categories_all\' global_sort=\'alpha\' global_sort_dir=\'asc\'}</p>
<h4>Recently Added Feature List</h4>
<p>To use a "most-recently added" list will allow you to display the most recently-added catalog items under a specified part of your hierarchy.</p>
<p>The syntax for a "most recently added" list is like:</p>
<p>&#123;Cataloger action=\'recent\' sub_template=\'my_sub_template\'}, where sub_template is the template to use to render the list.
There are four optional parameters, count=\'3\' alias=\'page_alias\', global_sort=\'date\', global_sort_dir=\'desc\' where count
is the number of items to include, page_alias indicates the top of the tree (e.g., a place in your menu hierarchy,
typically a category page) in which to look for new items. A special value for "page_alias" is "/", which means
to use <i>all</i> pages in the site. global_sort may be \'date\' (for item creation date) or \'mdate\' for modification date, and
global_sort_dir may be \'asc\' or \'desc\'.</p>
<h4>Random Items Feature List</h4>
<p>The syntax for a "random" list is like:</p>
<p>&#123;cCataloger action=\'random\' sub_template=\'my_sub_template\'}, where sub_template is the template to use to render the list. There are two optional parameters, count=\'3\' alias=\'page_alias\', where count is the number of items to include, and page_alias indicates the top of the tree (e.g., a place in your menu hierarchy, typically a category page) in which to look for new items. A special value for "page_alias" is "/", which means to use <i>all</i> pages in the site.</p>
<h4>Variable</h4>
<p>You can grab variables (attributes) outside of your Cataloger templates, say in a global content block, using the variable method. The syntax looks like:</p>
<p>&#123;Cataloger action=\'variable\' name=\'itemnotes\' default=\'no notes\'}, where name is the attribute to display (using the same all lower-case, punctuation-free representation like the smarty template variables), and default is the value to use if the attribute is not defined.</p>
<h4>Item Comparisons</h4>
<p>As of version 0.7.7, there is a product comparison action:</p>
<p>&#123;cCataloger action=\'compare\' sub_template=\'my_sub_template\' items=\'item1,item2,item3\'}, where sub_template is the template to use to render the list, and items is a comma-delimited list of item page aliases to compare. Bolder users may also choose to pass in the items to compare as request variables, thereby enabling dynamic comparisons based on user selections. Do this by setting the "items" variable on the request passed to the page containing the Cataloger tag with a compare action.</p>
<p>The default item comparison template could use some styling, e.g.,:</p>
<pre>
.item_comparison th {font-weight: bold; padding: 5px; text-align:center;}
.item_comparison td {border: 1px solid gray; padding: 3px 5px;text-align:right;}
</pre>
<h3>Customization and Advanced Topics</h3>
<h4>Catalog Item Attributes</h4>
<p>The default item attributes are typical for a catalog of products or artworks, but by going into Extensions &gt; Cataloger &gt; Manage User-Defined Attributes, you can change the attributes. It\'s best to define the attributes before you start entering Catalog Items.</p>
<p>Note that the attributes you define may need to be added to the template that you\'re using to display Catalog Items -- see Custom Templates below.</p>
<h4>Catalog Category Attributes</h4>
<p>Similarly, you can set attributes for Categories. Again, the attributes you define may need to be added to the template that you\'re using to display Catalog Categories -- see Custom Templates below.</p>
<h4>Printable Catalog Attributes</h4>
<p>Likewise, you can set attributes for Printable Catalogs. Again, the attributes you define may need to be added to the template that you\'re using to display your Printable Catalog -- see Custom Templates below.</p>
<h4>Custom Templates</h4>
<p>If you\'re willing to mess around with Smarty Templates, you can change the layout of any of the pages generated by Cataloger. This should make certain developers very happy, even if the inefficiency of the rest of the code will not. There are four kinds of templates: one kind for Catalog Items, one kind for Catalog Categories, and one kind for Printable Catalogs, and one kind for "Feature" lists, such as recently added items or random selections.</p>
<p>When editing a Template, the admin screen will display a list of Smarty tags available to you for that kind of template. This
will only happen once the module knows what kind of template you\'re editing, so when you first create the template, it displays all
the Smarty tags it knows about, only some of which being applicable.</p>
<h4>Displaying Attributes on Item Pages</h4>
<p>Attributes are available to Smarty as top-level variables. They are stored as sanitized versions of the attribute names, which means
it is converted to lower case and all punctuation and non-US-ASCII characters get removed. This is because Smarty is finicky, and will not handle these characters.</p>
<p>So, for example, if you have an attribute called "Glücklichkeit", there will be a Smarty variable {$glcklichkeit}. Note that the "ü" is omitted.</p>
<p>Fortunately, this is simplified by the $attrlist list available. This is a list of attributes by formal name ("Glücklichkeit") and their key ("glcklichkeit"). For example:
<pre>
	{section name=at loop=$attrlist}
	&lt;div class="item_attribute_name">{$attrlist[at].name}:&lt;/div>&lt;div class="item_attribute_val">{eval var=$attrlist[at].key}&lt;/div>
	{/section}
</pre>
<p>As of version 0.8, you can assign an alias to each attribute. These aliases need to be US-ASCII and contain no punctuation. They can be used instead of the sanitized attribute name (e.g., you could use the alias "gluecklichkeit").</p>
<h4>Displaying Attributes on Pages with Lists of Items</h4>
<p>Attributes are included in the $itemlists[#] in two different ways: top-level attributes of the item, and as part of the item\'s "attr" array. They are stored as sanitized versions of the attribute names, which means
it is converted to lower case and all punctuation and non-US-ASCII characters get removed. This is because Smarty is finicky, and will not handle these characters.</p>
<p>So, for example, if you have an attribute called "Glücklichkeit", the item will have $item.glcklichkeit and $item.attrs[\'glcklichkeit\']. Note that the "ü" is omitted. You can refer to this attribute in your template
with Smarty code like: {$itemlist[index].glcklickkeit} or {$itemlist[index].attrs.glcklichkeit}.</p>
<p>Fortunately, this is simplified by the $attrlist list available. This is a list of attributes by formal name ("Glücklichkeit") and their key ("glcklichkeit"). For example:
<pre>
    {foreach from=$attrlist item=attr key=k}
    {$attr}: {$items[numloop][$k]}
    {/foreach}
</pre>
<p>As of version 0.8, you can assign an alias to each attribute. These aliases need to be US-ASCII and contain no punctuation. They can be used instead of the sanitized attribute name (e.g., you could use the alias "gluecklichkeit").</p>
<h4>Smarty tags in Attributes</h4>
<p>Sometimes, you\'ll want the descriptions of your items to include smarty tags (e.g., cms_selflink). To make that work, you\'ll need to
update your template. For the attributes where you want smarty tags to be active, you\'ll need to nest the smarty evaluations in your template. For example:</p>
<pre>
&#123;eval var=$attrlist[at].key}
</pre>
<p>becomes:</p>
<pre>
&#123;eval var=$entry->input assign=thisAttr}&#123;eval var=$thisAttr}
</pre>
<p>Ugly? Yup. But it works.</p>
<h3>Cataloger Image System</h3>
<p>Cataloger has an image system that will allow you to dynamically change the image display size. If you do not like it, you can alter
the templates and use any image system you want.</p>
<p>When you upload an image using Cataloger, it gets put in a special set of directories to make the imaging easier. You will see more
about this later.</p>
<p>It works by calling a PHP program instead of directly referencing the image. The program uses the filename to see if the
image already exists in the correct size. If so, it redirects to that image. Otherwise, it uses your GDLIB or ImageMagick to create
the image in the correct size, and then redirects to it.
</p>
<h4>Cataloger Image Filespec Explanation</h4>
<p>A cataloger image has a filespec like:
<br />
root_path/modules/Cataloger/Cataloger.Image.php?i=itemname_f_1_400_1.jpg&amp;ac=82888
</p>
<p>The interesting thing is "itemname_f_1_400_1.jpg" - the stuff before is just a call to the program, and the &amp;ac=82888 is a random thing that
is designed to prevent browser caching. So examining the name piece by piece (separating at the underscores), we have:</p>
<ul>
<li>item name - this is the alias of the item/category page containing the image.</li>
<li>image type - this is a designation for image type:<ul>
<li>f - item full-size image</li>
<li>t - item thumbnail</li>
<li>cf - category full-sized image</li>
<li>ct - category thumbnail</li>
<li>ctf - printable catalog full-sized image</li>
</ul>
</li>
<li>image number - so a given item/catalog/etc can have multiple images</li>
<li>long dimension - long dimension of the image, in pixels</li>
<li>missing flag - 1 if you want to show an "image missing" image if this image doesn\'t exist, 0 otherwise</li>
</ul>
<p>
This will take an image in root_path/uploads/images/catalog_src/itemname_src_1
<h4>Accessing your Original Image</h4>
<p>When Cataloger uploads images, it puts them into a directory called "cataloger_src" in your uploads/images/ directory. They images are named according to the alias of the page:
alias_src_#.jpg where # is the image number for that page.</p>
<p>So, to access the originally uploaded images on a Category page, you\'d generate the URL manually.</p>
<p>So on a category page, for example, instead of using {$items[numloop].image} you\'d use "/uploads/images/cataloger_src/{$items[numloop].alias}_src_1.jpg".</p>
<h3>Credits</h3>
<p>Thanks to <a href="http://www.id-a.co.uk">Paul Cooper</a> for sponsoring the development of textarea attributes.</p>
<p>Thanks to numerous patient users and bug testers (many of whom had no idea what they were getting into.)</p> 
<h3>Support</h3>
<p>This module does not include commercial support. However, there are a number of resources available to help you with it:</p>
<ul>
<li>For the latest version of this module, FAQs, or to file a Bug Report, please visit the CMS Made Simple  <a href="http://dev.cmsmadesimple.org">Developer Forge</a>.</li>
<li>To obtain commercial support, please send an email to the author at <a href="mailto:sjg@cmsmodules.com">&lt;sjg@cmsmodules.com&gt;</a>.</li>
<li>Additional discussion of this module may also be found in the <a href="http://forum.cmsmadesimple.org">CMS Made Simple Forums</a>.</li>
<li>The author can often be found in the <a href="irc://irc.freenode.net/#cms">CMS IRC Channel</a>.</li>
<li>Lastly, you may have some success emailing the author directly and grovelling for free support.</li>
</ul>
<p>As per the GPL, this software is provided as-is. Please read the text
of the license for the full disclaimer.</p>
<h3>Copyright and License</h3>
<p>Copyright &copy; 2012, Fernando Morgado (JoMorg) <a href="mailto:jomorg.morg@gmail.com">&lt;jomorg.morg@gmail.com&gt;</a>. All Rights Are Reserved.</p>
<p>Copyright &copy; 2008, Samuel Goldstein. All Rights Are Reserved.</p>
<p>This module has been released under the <a href="http://www.gnu.org/licenses/licenses.html#GPL">GNU Public License</a>. You must agree to this license before using the module.</p>';

$lang['postinstall']='Make sure to set the "Modify Catalog Settings" permission on users who will be administering the catalog.';
?>
