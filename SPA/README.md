# SPA with Backbone.JS

1. Backbone will be used to provide a taste of MVC architecture to the app, Underscore for itís utility functions, LAB.js for asynchronous script loading and the jQuery templating plugin will be used to render our client-side views.
2.  Backbone proxies to the Underscore library for handling itís collections of models.

3. The idea behind using Backbone is that it allows you organize your interface into logical views, backed by models, each of which (views) can be updated independently when the model changes, without having to redraw the page.

4. Views save you having to dig through JSON, do DOM lookups and update your HTML manually by binding a viewís render function (Each view has a render function) to a modelís ëchangeí event ñ this way anywhere a modelís data is shown in your UI, itís always up to date. In our app weíll be creating an IndexView, SubalbumView and PhotoView to reprepsent the three possible gallery levels that can be viewed.

5. The final piece of the puzzle is something to handle our application routes for client-side URL fragments. We also need something that can correctly connect these to both actions and events. Backbone.Controller helps us achieve this and for our gallery app weíre simply going to define a Gallery controller for our routing.

6. Folder - http://localhost/backbone/SPA/