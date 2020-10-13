# Format

V 1.4

> Tested with Yellow 0.815

Add fomatting without using HTML in Markdown.


## How to install extension

1. [Download and install Datenstrom Yellow](https://github.com/datenstrom/yellow/).
2. [Download extension](https://github.com/bsnosi/yellow-extension-format/archive/master.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `yellow-extension-format-master.zip` into your `system/extensions` folder.

To uninstall delete the [extension files](extension.ini).

## Usage

Create a `[format class style id]` shortcut.  

###### Arguments

`class` = a class defined in a css-file attached to the page     
`style` = optional: an additional style definition     
`id` = an identifier for adressing the area or assigning a `#format` from an attached css-file

> `[format]`  with no parameter creates an information string "**[format class style id]**" in the preview/final page.

###### Examples

~~~
[format news]

[format - "width=100%"]

[format - - special]

… bla …

[format /]

[format end]

[format end news]
~~~

> You can use either `/` or `end` for closing an area. Naming/commenting of closing is possible in both cases and is optional.

This structure in markdown file will create this html

~~~
<div class="news">
<div style="width=100%">
<div id="special">
… bla …
</div>
</div>
</div>
~~~

Placing `[format …]` shortcuts like this

~~~
[format news][format - "width=100%"][format - - special]
… bla …
[format /][format end][format end news]
~~~

it will lead to this html

~~~php+HTML
<p><div class="news"><div style="width=100%"><div id="special">
… bla …
</div></div></div></p>
~~~

The parser creates in this case  an additional `<p>` tag. This might be a challenge or and advantage, depending to your style definition for paragraphs.

> **A block needs *always* an opening `[format…]`and a closing `[format /]`**, otherwise your page structure may be damaged!

## History

2020-10-13 c 1.4: No functional changes cleanup.

2020-01-24 v 1.4: Missing " added and code clean up

2019-12-12 Improved code, `id` added, improved `README`

2019-05-05 Initial Release

## Developer

[Norbert Simon](https://nosi.de) 
