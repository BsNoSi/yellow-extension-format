# Format

**Development discontinued.**

Version 1.4.2

> Tested with Version 0.8.33 / Release 0.8.16 of Yellow

## Application

Add fomatting without using HTML in Markdown.


## Install

1. [Download and install Datenstrom Yellow](https://github.com/datenstrom/yellow/).
2. [Download extension](https://github.com/bsnosi/yellow-extension-format/archive/master.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `yellow-extension-format-master.zip` into your `system/extensions` folder.

To uninstall delete `format.php` in `sytem/extensions/`.

## Usage

     [format class style id]

| Parameter | Function |
| :---: | :---   |
| class | A class defined in theme |
| style | An additional style definition → No verification of validity. |
| id | An identifier for adressing the area or assigning a `#format` from theme. |

> `[format]`  with no parameter creates an information string "**[format class style id]**" in the preview/final page.

You have to enclose a text area to achieve formatting:

```
[format highlight]

Text to be highlighted

[format /]  
{or} [format end] 
{or} [format / highlight]
{or} [format end highlight]
```
> You can use either `/` or `end` for closing an area. Naming/commenting of closing is possible in both cases and is optional.

> **A block needs *always* an opening `[format …]`and a closing `[format /]`**, otherwise your page structure may be damaged!

As with `div` you can nest [format …]: 

```.md
[format news]

[format - "width=100%"]

[format - - special]

… bla …

[format /]

[format end]

[format end news]
```

This structure in markdown file will create this html

```.html
<div class="news">
<div style="width=100%">
<div id="special">
… bla …
</div>
</div>
</div>
```

Placing `[format …]` shortcuts like this

```.md
[format news][format - "width=100%"][format - - special]
… bla …
[format /][format end][format end news]
```

will lead to this output

```.html
<p><div class="news"><div style="width=100%"><div id="special">
… bla …
</div></div></div></p>
```

The parser creates in this case  an additional `<p>` tag. This might be a challenge or and advantage, depending to your style definition for paragraphs.


## History

2020-11-21: Alignment to install changes

2020-10-17: v 1.4.1: API changes applied.

2020-10-13 v 1.4: No functional changes cleanup.

2020-01-24 v 1.4: Missing " added and code clean up

2019-12-12 Improved code, `id` added, improved `README`

2019-05-05 Initial Release

## Developer

[Norbert Simon](https://nosi.de) 
