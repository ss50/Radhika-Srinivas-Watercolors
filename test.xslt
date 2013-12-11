<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
xmlns="http://www.w3.org/1999/xhtml">
<xsl:output method="html"/>

<xsl:template match="/">
      <html>
         <body>
            <xsl:apply-templates/>
         </body>
      </html>
   </xsl:template>

<xsl:template match="CATALOG/*">
            <table style="margin: 0 auto;" cellspacing="30">
                <p style="font-size:20px; text-align:center"><xsl:value-of select="PAINTING/CATEGORY"/></p>
                <xsl:for-each select="PAINTING[position() mod 4 = 1]">
                        <tr>
                        <xsl:for-each select=" . | following-sibling::*[position() &lt; 4]">
                            <td valign="bottom" align="center">
                                <a class="fancybox" rel="example" href="{large}"><img src = "{file}"></img></a>
                                <p><xsl:value-of select="TITLE"/></p>
                                <p><xsl:value-of select="DIMENSIONS"/></p>
                            </td>
                        </xsl:for-each>
                    </tr>
                </xsl:for-each>
            </table>

</xsl:template>    
    
</xsl:stylesheet>