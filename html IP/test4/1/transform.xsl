<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="html" encoding="UTF-8" />
    
    <!-- Template for the entire document -->
    <xsl:template match="/products">
        <html>
            <head>
                <title>Electronics Products</title>
            </head>
            <body>
                <h2>Electronics Products</h2>
                <table border="1">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                    </tr>
                    <!-- Sort products by price descending and filter by category "Electronics" -->
                    <xsl:for-each select="product[category='Electronics']">
                        <xsl:sort select="price" order="descending" data-type="number"/>
                        <tr>
                            <td><xsl:value-of select="id"/></td>
                            <td><xsl:value-of select="name"/></td>
                            <td><xsl:value-of select="price"/></td>
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
