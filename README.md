JSONP is for cross-domain request, making a request to a different domain

The browser security model dictates that XMLHttpRequest, frames, etc. must have the same domain in order to communicate
This is not a good idea, so to solving this problem I can suggest script ie: <script></script>

Script tag:
Difficult to know when the content is available, no standard methodology and security risk.

I'm introducing technology for the script tag method for cross-domain data fetching: JSON with Padding, or simply JSONP.


The working of JSONP  is simple but requires a little bit of server-side cooperation. Basically, the idea is that you let the client decide on a small chunk of arbitrary text to prepend to the JSON document, and you wrap it in parentheses to create a valid JavaScript document.

The client decides on the arbitrary prepended text by using a query argument named jsonp with the text to prepend. Simple! With an empty jsonp argument, the result document is simply JSON wrapped in parentheses.

/*
simply ....
JSONP stands for JSON with padding, and it provides a way for the client to specify some code that should be added to the start of the JSON response. This allows the JSONP response to be directly executed in the browser. 
*/

lets see this example, script with ?callback=myFunction and response json looks like myFunctiond .....})

<script> </br>
function clickButton() {</br>
  
  var s = document.createElement("script");</br>
  s.src = "https://localhost:8080/test/jsonp.php?callback=myFunction";</br>
  /*</br>
   myFunction({"name":"jithu", "age":30, "city":"Tokyo"});</br>
  */</br>
  </br>
  document.body.appendChild(s);</br>
}</br>
</br>
function myFunction(myObj) {</br>
  document.getElementById("demo").innerHTML = myObj.name;</br>
}</br>
</script></br>
