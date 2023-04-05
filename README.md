# Movie Plugin

This guide will walk you through the process of pulling a project from a Git repository and uploading a zipped file to WordPress plugins. The project is a custom plugin for WordPress that contains a custom post type, an API for the custom post type, and meta boxes.

## Requirements
To complete this guide, you will need the following:

  + A local development environment set up for WordPress.
  + Git installed on your machine.
  + A text editor (e.g., VS Code, Sublime Text).
  + Access to the command line.


## Steps
Open your terminal and navigate to the root directory of your WordPress installation.

1. Create a new directory for your plugin by running the following command:

  ```
  mkdir my-plugin
  ```
2. Navigate into the new directory by running the following command:

  ```
  cd my-plugin
  ```

3. Initialize a new Git repository in the directory by running the following command:
  ```
  git init
  ```
4. Use Git to pull the project from the Git repository by running the following command:

  ```
  git pull https://github.com/username/repo.git
  Replace https://github.com/username/repo.git with the URL of the Git repository.
  ```

5. Once you have pulled the project, zip the entire plugin directory by running the following command:
  ```
  zip -r my-plugin.zip plugin directory
  ```
OR use a program to zip files. If you do not have one installed download it from https://www.7-zip.org/

6. Upload plugin to wordpress

    Open your WordPress dashboard and navigate to ***Plugins > Add New***.

    Click the ***"Upload Plugin"*** button at the top of the page.

    Click the ***"Choose File"*** button and select the zipped file you created in step 5.

    Click the ***"Install Now"*** button and wait for the installation to complete.

    Once the installation is complete, click the ***"Activate Plugin"*** button.

    You should now see the new custom post type in your WordPress dashboard.

## Conclusion
By following these steps, you should now have successfully pulled a project from a Git repository and uploaded a zipped file to WordPress plugins. If you encounter any issues, please refer to the documentation for Git or WordPress.
