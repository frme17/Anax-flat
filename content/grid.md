---
views:
    sidebar:
        region: sidebar-left
        template: default/content
        sort: 1
        data:
            meta:
                type: content
                route: gridside
    byline:
        region: after-main
        template: default/content
        sort: 1
        data:
            meta:
                type: content
                route: block/byline
...
Gridsida
========

Den här sidan är skriven i Markdown.
Här testar vi olika typer av texter och även sidokolmn (sidebar).

Texten till sidokolumnen är skriven i gridside.md.

<img class="leninbasket" src="img/lenin.jpg" alt="Lenin spelar basket">

Texten nedan är hämtad från [Daring Fireball](https://daringfireball.net/projects/markdown/basics)
Det är svårt att hitta på bra exempeltexter. :-)

<hr>

A First Level Header
====================

A Second Level Header
---------------------

Now is the time for all good men to come to
the aid of their country. This is just a
regular paragraph.

The quick brown fox jumped over the lazy
dog's back.

### Header 3

> This is a blockquote.
>
> This is the second paragraph in the blockquote.
>
> ## This is an H2 in a blockquote

Some of these words *are emphasized*.
Some of these words _are emphasized also_.

Use two asterisks for **strong emphasis**.
Or, if you prefer, __use two underscores instead__.

Unordered (bulleted) lists use asterisks, pluses, and hyphens as list markers. These three markers are interchangable; this:

*   Candy.
*   Gum.
*   Booze.

Ordered (numbered) lists use regular numbers, followed by periods, as list markers:

1.  Red
2.  Green
3.  Blue


####Code (Header 4)

To produce a code block in Markdown, simply indent every line of the block by at least 4 spaces or 1 tab. For example, given this input:

Here is an example of AppleScript:

    tell application "Foo"
        beep
    end tell
