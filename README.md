# WordPress Child Theme Template
A template for a basic WordPress Child Theme that can be adapted to fit your needs. It includes a structured CSS file, a placeholder image with specified dimensions, as well as pre-generated folders for CSS, Javascript, and images should you prefer to add code there.

This can be used with any theme - you just need to make the appropriate changes. For further reading and in-depth information, check out the WordPress.org Codex Page: https://codex.wordpress.org/Child_Themes and for high-level theme development, see https://codex.wordpress.org/Theme_Development.

This was written by Danny Santoro (https://danielsantoro.com) because of the uncertainty around how to properly set up child themes, and also to serve as a quick tool for when he needed to create one. He's a pretty nice fellow, so feel free to say hi on Twitter: https://twitter.com/Danny_Santoro

## How to Use
To use this child theme template, clone it locally and rename the folder to something memorable, even if it's just "theme-child". Then, follow the steps below:

1. Open `style.css`
2. Change the Theme Name to a name for your custom theme. This is what will appear in the Themes screen, so if you're building a theme for ACME Inc. which is a template of the Genesis Framework, name it "ACME".
3. Change the description to something memorable. It's a good idea to include something like "Child Theme of [Theme Name]" at the end, at least during development, to quickly help you identify the parent theme without having to look at the files.
4. Change the Author to your name or company name.
5. Change Author URI to your home page - if you're coding for your own business, you can leave it at your URL or delete this line.
6. Change Template to the **URL slug** of the parent theme. Note in the example that instead of typing out "Twenty Seventeen", the proper name of the theme, "twentyseventeen" is used. You can find this by looking in your Themes FTP folder, or by going off of what the parent theme folder is named if it's unzipped in your computer.
7. Version can be used in a variety of different ways. A good scheme is: [major overhaul].[large fix or update].[small fix or update]. You could even add a fourth level for [hotfix] - in any case, it's good practice to keep this updated and to _add any changes to the included `changelog.txt` file_. This gives you the ultimate reference if you need to go back.
8. Save your `style.css` file.
9. Change the Child Theme's thumbnail/screenshot by replacing the `screenshot.png` image - see below for more information.

After you've completed the above steps, take the entire child theme folder and copy it to your `wp-content/themes` folder so it sits on the same level as the parent theme. You can also compress it into a .zip file and use the "Add New" button of your WordPress Theme Dashboard.

As long as you have a correct `style.css` sheet and folder name, your child theme should now appear in the Theme selection page of your WordPress installation.

Now, you're all set up! Add code, play around, improve on the template, and have a blast. If you see ways to improve or just want to say hi/thanks, swing by https://danielsantoro.com/wordpress-child-theme-template

## Organized CSS Starter Template File
While this is originally structured as if you were starting a theme from scratch, it can be used for modifications as well. In it are different groups, sections, and subsections to keep your code orderly and clean. Note that if there is no CSS in your structured template, then it will just inherit your parent's theme files (so you don't have to worry about filling everything out).

It's meant to be opened in a text editor like Sublime Text or Atom. Use the Search function to quickly get to the correct section based off of the Table of Contents.

See the structure and use for each section below:

### Groups
There are a few main groups in the template:

* **A** - Used for elements that apply site-wide. Typically general and universal, they can be overridden by anything below it.
* **C** - Used for content-specific code, such as element positioning, colors, and most everything else.
* **M** - Modules that may not fit into a specific category, or are added in later and can be sorted down the road. Examples could be styling for a new contact form, a forum, a sidebar widget, etc. - in general, anything that doesn't fit into a C group.
* **Z** - Specfic rules for media queries. Your main theme template should handle most media queries - this area is for if you need to override or append them.

### Sections & Subsections
Next to each section is a brief explanation of what CSS should be placed there as a general guideline.

* **A-0** - Stylesheet Imports (bringing in additional sheets if you use the CSS folder or from an outside source)
* **A-1** - Font Imports (for loading Google Fonts, FontAwesome, fonts on your server, etc.)
* **A-2** - Structure & Layout (establishing main layout rules such as content area width, sidebar width, navigation width, etc. This is the general appearance and framework to build on.)
* **A-3** - Typography (adding all typography rules to your site. Here you can bring in the already-loaded fonts from A-1.)
 * **A-3a** - Headers (rules for h1, h2, h3, h4, h5, and h6 tags.)
 * **A-3b** - Hyperlinks (styles specific to links. Consider the default state along with :hover, :visited, and :active)

* **C-1** - Header (any elements related to the header display, such as images, social links, paragraphs, sliders, etc.)
* **C-2** - Navigation (elements related to your navigation menus. If you have a secondary navbar, then you can create something like C-2a to keep that separate.)
* **C-3** - Main Body (code specific to the main body of regular pages such as special formatting for info areas, image padding rules, embeds, etc.)
* **C-4** - Sidebar (rules regarding the sidebar display. For widgets, create subsections like C-4a, C-4b, etc.)
* **C-5** - Footer (rules for your footer display, such as copyright styling, widgets, etc.)

* **M-1** - Special Module (code that may belong to a new element or that doesn't fit in anywhere else. An example could be a forum section (which would likely require subsections).)

* **Z-1** - Media Queries (code to override or augment parent theme media queries)

-----

The important things to remember when adding and changing sections is to keep a consistent number format and to always keep your Table of Contents up to date. This allows you to quickly search and find related code (or find where you're supposed to add code) without searching or ever using the dreaded `!important` tag.

### Moving to separate CSS files ###
Included in the Child Theme Template is a CSS folder. You can move parts of the structure to individual files there (which is particularly handy if you use LESS or SASS to write your CSS) and either have them compile to your main style.css or use the CSS import command to bring it in.

## Image ##
The included image is a good placeholder, but you'll want to customize it down the road. The ideal dimensions as of January 1, 2017 are 1200px wide by 900px tall. Images are both accepted only in .PNG format. You can use Photoshop or any other image editor to create a good image - some free alternatives are GIMP or (my recommendation) Pixlr. It _must_ be titled `screenshot.png` - capitalization does not matter, but it has to sit in the main folder next to `functions.php` and `styles.css`.
