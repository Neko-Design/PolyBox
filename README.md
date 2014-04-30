<img src="main.png" alt="PolyBox Logo">

WARNING! This software is still under heavy development and will probably be broken for quite a while. Don't download it unless you are interested in developing the software further as you will require knowledge of PHP and SQL to make it work correctly.

Welcome to PolyBox! This blogging software was developed by Ewen McCahon as a simple and lightweight blog that could be easily modified and styled even by beginner users. All you require for the basic blog is a web server with PHP and MySQL.

In it's default setting, PolyBox doesn't use JavaScript or HTML5, so it's compatible with most users. If you wish to use some of the advanced features, enable the 'Modern Theme' on the settings page.

Features
------

Along with ease of use and simplicity, PolyBox offers a few other features such as:

  - Varying User access levels
  - Dynamic Error Pages
  - Content Slugs eg. http://site.com/post-title
  - Management and Editing Interface
  - Statistics and Logging

With a few extra checkboxes, PolyBox can make use of many extra JavaScript libraries or CSS3 features, such as:

  - LightBox Image Modals
  - Automatic URL Linking
  - Page Transitions
  - Drag and Drop File Uploading
  - Fancy Post management interface
  - Fancy menu editor
  - Disqus Comments

As a student, I don't really have time to make immediate fixes on the code or update broken features, but the source code is (relatively) easy to read and finding the source of problems shouldn't be hard if you know even basic PHP.

In it's current state, there's still quite a bit of plain HTML in the files, but I'm working to make the back end more modular and easier to theme by moving all of the actual display code into a seperate file, so soon it should be even easier to customise.

At this point, it is important to note that this software is in EXTREME ALPHA STAGE, and more than likely will not work in any way shape or form on a production website. I am still working out bugs in the menu system and user authentication, so at the moment, they are hard coded into the files.

Screenshots
-------

  - [Default Post List](screenshots/default_home.png)
  - [Post Page with Comments](screenshots/default_post.png)
  - [Post Management Page](screenshots/manage_posts.png)

Please note Disqus comments are enabled by the user and require a Disqus account prior to use.

Contributing
------

I hope you enjoy using PolyBox, and if you wish to contribute to the project, feel free to add any new features and submit a pull request on GitHub. If your feature gets added to the main version, your name or GitHub nickname will be added to the developer list and source code.

Happy hacking!
