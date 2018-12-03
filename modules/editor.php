<!-- see external script "main.js" for the code -->
<h1>Code editor <img src="/images/logoProgrammingfish.jpg" width="20px" height="20px" style="float: right"></h1>
<div id="guide"></div>
<?php
    include "toolbar.php";
?>
<div id="editor">
    <textarea rows="1" cols="100" class="w3-input" id="elm" placeholder="#your command"></textarea><br>
    <div id="error">No errors!</div>
    <button onclick="load()" class="w3-button">Apply code</button>
    <button class="w3-button">Save</button>
    <button style="float: right" class="w3-button" onclick="clear()">Clear</butto>
</div>
<div id="preview">
    <div id="content">
        <h1>Text editor</h1>
        <div id="pref">
            <textarea rows="20" cols="100" class="w3-input" id="display"></textarea>
        </div>
    </div>
</div>
<p>View command <a href="/how%20to%20use/commands.html">list.</a></p>
