# Format

> V 1.1.0 (Requires YELLOW 0.8.4 or higher)

Add fomatting without using HTML in Markdown.


## How to install extension

1. [Download and install Datenstrom Yellow](https://github.com/datenstrom/yellow/).
2. [Download extension](https://github.com/bsnosi/yellow-extension-format/archive/master.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `yellow-extension-format-master.zip` into your `system/extensions` folder.

To uninstall delete the [extension files](extension.ini).

## Usage

Create a `[format class style]` shortcut.  

The following arguments are available, all but the first argument are optional:

`class` = a class defined in a css-file attached to the page
`Style` = optional: an additional style definition

`[format]`  with no parameter creates an information string "**[format class style]**" in the preview/final page of YELLOW .

`[format - style]` creates a container with style information only.


## How to create a formatted block

A block needs *always* an opening and an ending:

```markdown
…
[format classname]
container content
[format end]
…
```

> Instead of `[format end]` you can use `[format /]` as a shortcut.



## Developer

[Norbert Simon](https://nosi.de) 