# MobWeb_UserSessionInformation extension for Magento

A simple helper extension that provides controllers that contain various information regarding the current session. These URLs can be used to get session information via JS.

For example `/usersessioninformation/index/comparison` returns: `{"count":3,"grandTotal":"300.0000"}` which is JSON-encoded and can be parsed by Javascript, for example via an AJAX call to update some HTML element.

Currently the following two controllers are available:

- usersessioninformation/index/cart
- usersessioninformation/index/comparison

## Installation

Install using [colinmollenhour/modman](https://github.com/colinmollenhour/modman/).

## Questions? Need help?

Most of my repositories posted here are projects created for customization requests for clients, so they probably aren't very well documented and the code isn't always 100% flexible. If you have a question or are confused about how something is supposed to work, feel free to get in touch and I'll try and help: [info@mobweb.ch](mailto:info@mobweb.ch).