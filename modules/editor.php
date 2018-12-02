<!-- see external script "main.js" for the code -->
<h1>Html text editor <img src="/images/logoProgrammingfish.jpg" width="20px" height="20px" style="float: right"></h1>
<div id="guide"></div>
<div id="editor">
    <input type="text" id="elm" placeholder="add element tag" class="w3-input" title="Add something like strong">
    <textarea id="input" rows="20" cols="100" class="w3-input"></textarea><br>
    <button onclick="load()" class="w3-button">Preview</button>
    <button class="w3-button">Save</button>
    <butto style="float: right" class="w3-button" onclick="clear()">Clear</butto>
</div>
<div id="preview">
    <div id="content">
        <h1>Your output</h1>
        <div id="display">
            
        </div>
    </div>
</div>
<script src="../scripts/main.js"></script>