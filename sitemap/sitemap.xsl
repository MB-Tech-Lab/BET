<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
    xmlns:sitemap="http://www.sitemaps.org/schemas/sitemap/0.9">
<xsl:output method="html" version="1.0" encoding="UTF-8" indent="yes"/>
<xsl:template match="/">
<html>
<head>
<title>XML Sitemap</title>
<style>
body{font-family:-apple-system,Segoe UI,Arial,sans-serif;margin:2rem;color:#1d3557;}
h1{font-size:1.25rem;}
table{border-collapse:collapse;width:100%;font-size:0.9rem;}
th,td{border:1px solid #e2e8f0;padding:6px 10px;text-align:left;}
th{background:#1d3557;color:#fff;}
tr:nth-child(even){background:#f8f9fa;}
a{color:#1d3557;}
</style>
</head>
<body>
<h1>XML Sitemap</h1>
<table>
<tr><th>URL</th><th>Last Modified</th><th>Change Frequency</th><th>Priority</th></tr>
<xsl:for-each select="sitemap:urlset/sitemap:url">
<tr>
<td><a href="{sitemap:loc}"><xsl:value-of select="sitemap:loc"/></a></td>
<td><xsl:value-of select="sitemap:lastmod"/></td>
<td><xsl:value-of select="sitemap:changefreq"/></td>
<td><xsl:value-of select="sitemap:priority"/></td>
</tr>
</xsl:for-each>
<xsl:for-each select="sitemap:sitemapindex/sitemap:sitemap">
<tr>
<td><a href="{sitemap:loc}"><xsl:value-of select="sitemap:loc"/></a></td>
<td><xsl:value-of select="sitemap:lastmod"/></td>
<td colspan="2">Sitemap Index Entry</td>
</tr>
</xsl:for-each>
</table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>