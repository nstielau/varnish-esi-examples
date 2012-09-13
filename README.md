varnish-esi-examples
====================

Here are a few examples of using Edge Side Includes on Pantheon, including checking request headers for ESI capabilities and setting response headers to indicate ESI content, as per the W3C Edge Architecture Specification (http://www.w3.org/TR/edge-arch)

## tl;dr

Check for ESI capability with the ```Surrogate-Capability``` request header and specify ESI content with the ```Surrogate-Control``` response header.
