<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSON RTE SERIALIZER</title>
</head>
<body>
    <h1>hello</h1>
    
    
<script type="module">
        
import { htmlToJson } from "@contentstack/json-rte-serializer/lib/";
const htmlDomBody = new DOMParser().parseFromString(
    "<p>This is HTML-formatted content.</p>",
    "text/html"
).body;
const jsonValue = htmlToJson(htmlDomBody);

console.log(jsonValue);

</script>
    <!-- <script src="s.js"></script> -->
</body>
</html>