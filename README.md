JSONP is for cross-domain request ,making request to different domain

The browser security model dictates that XMLHttpRequest, frames, etc. must have the same domain in order to communicate
This is not good idea, so to solving this problem I can suggest script ie : <SCRIPT></SCRIPT>

Script tag:
Difficult to know when the content is available, no standard methodology and security risk.

I'm intriducing a technology for the script tag method for cross-domain data fetching: JSON with Padding, or simply JSONP.


