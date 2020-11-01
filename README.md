# frontbase
A front-end stack to build Front-End content with Html5 / SCSS / JavaScript and evnetually probably PHP as a back-end.

This is a front-end stack styleguide to start a front-end on a project (website). It uses the 7-1 CSS architecture. I created it to experiment and to build something functionnal and to have a good workflow with these technologies.

For now this projet is a small framework to quickly build landing pages, or small website, it is designed to eventually be able to handle large scale website or app with the architecture it uses. The project if documented all over the code and there will eventually be a how-to in the readme file so it's easy to set up and start building something.

# Architecture

The structure is the traditionnal css/img/js/node/sass folders and pages(.html) files at the root of the project while the sass folder contains the 7-1 architecture. The sass folder works like that:

    - abstracts : In this folder, there is the functions, mixins and variables for the project.
    - base : Like the name, this is pretty much the base, there is the animations, the base, the typography and the utilities.
    - components: All the components to be used on the website
    - layout : The layout for the website (grid, container etc)
    - pages: The different styling for the page(s) of the website
    - theme: Only used if there is multiple theme, example: dark or light theme.
    - vendor: Anything from the outisde like bootstrap / a js framework and other external ressources to build the website.

For the example of the components ready to use from the stack, just check the guide.hml for an overview of what you can re-use and modify for your own good.
    

# HOW-TO euphros frontbase front-end framework

How to compile your sass:

    - To compile SASS just use: npm run compile in the terminal.
    - The file guide.php is only a styleguide, it is now in .php for testing purpose only for me to repeat elements and such.



