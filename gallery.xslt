<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
xmlns="http://www.w3.org/1999/xhtml">
<xsl:output method="html"/>

<xsl:template match="/">
      <html>
         <body>
            <xsl:apply-templates/>
            <p>The Vanavani series was created for a fundraiser and all of the proceeds went towards the Vanavani school in Chennai, India</p>
            <br/>
            <hr/>
            <br/>
            <p style="text-align: center">Website Design by Shreya Srinivas</p>
            <p style="text-align: center">Copyright Radhika Srinivas Watercolors All Rights Reserved</p>
             <br/>
            <br/>
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
                            </td>
                        </xsl:for-each>
                        </tr>
                        <tr>
                           <xsl:for-each select=" . | following-sibling::*[position() &lt; 4]">
                              <td valign="top" align="center">
                              <p><xsl:value-of select="TITLE"/></p>
                                <p><xsl:value-of select="DIMENSIONS"/></p>
                                <p><xsl:value-of select="PRICE"/></p>
                            </td>
                           </xsl:for-each>   
                        </tr>
                </xsl:for-each>
            </table>

</xsl:template>    
    
</xsl:stylesheet>