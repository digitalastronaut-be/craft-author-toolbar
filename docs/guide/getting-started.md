# Getting started

## How to enable the toolbar

For the toolbar to load correctly you need to have at least the basic HTML structure present on the page as the toolbar will be injected at the beginning of the body tag.

::: code-group

```twig[index.twig]
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Document</title>
	</head>
	<body>
		<!-- Author toolbar -->

		<!-- Your page content -->
	</body>
</html>
```

:::

::: tip
The toolbar is injected via `registerJs()`/`registerHtml()` before Twig starts rendering the page, so native Craft `{% cache %}` tags - even ones wrapping the whole `<head>`/`<body>` - don't capture or freeze it; it's always re-evaluated on every request. When the [Blitz](https://putyourlightson.com/plugins/blitz) plugin is installed and enabled, the toolbar additionally defers its permission check to the request that loads it, so it stays correct per-visitor even when the surrounding page is served from Blitz's static cache.
:::

If all this is done and the enable author toolbar setting on the `Author toolbar > Settings` page is enabled it should load correctly

### Permissions
