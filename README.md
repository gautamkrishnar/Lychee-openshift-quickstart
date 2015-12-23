# Lychee on openshift

Lychee is a free photo-management tool, which runs on your server or web-space. Installing is a matter of seconds. Upload, manage and share photos like from a native application. Lychee comes with everything you need and all your photos are stored securely.
Know more: http://lychee.electerious.com/

### Install with one click

Create an account at http://openshift.redhat.com/

Click on the button below to deploy the best Photo-Management application to openshift:

<a href="https://openshift.redhat.com/app/console/application_types/custom?cartridges[]=php-5.4&cartridges[]=mysql-5.5&initial_git_url=https://github.com/gautamkrishnar/Lychee-openshift-quickstart&name=lychee" target="_blank">
![Click to install OpenShift](http://launch-shifter.rhcloud.com/launch/light/Click to install.svg)</a>

### How to use
I had configured everything for you. After installation you just need to point your browser to : http://lychee-yourdomain.rhcloud.com/

to access your own insance of Lychee on openshift.

You can login to the admin dashboard using:
```
username: admin
password: admin
``` 
![](http://i.imgur.com/lsxdzfs.png?1)

**Don't forget to change your default password to keep your data safe**

If you are experiencing any problems, please open a [new issue](https://github.com/gautamkrishnar/Lychee-openshift-quickstart/issues/new) in this repository.

### Installing via the command line


Create a PHP application :

	rhc app create lychee php-5.4 mysql-5.5

You can also use any other custom name instead of 'lychee'. Remember to use that app name in the next command

Add this upstream Lychee quickstart repo

	cd lychee
	rm php/index.php
	git remote add upstream -m master https://github.com/gautamkrishnar/Lychee-openshift-quickstart.git
	git pull -s recursive -X theirs upstream master

Push the repo upstream to OpenShift

	git push        

Head to your application at:

	http://lychee-$yourdomain.rhcloud.com

To give your new Anchor site a web address of its own, add your desired alias:

	rhc app add-alias -a lychee --alias "$whatever.$mydomain.com"

Then add a cname entry in your domain's dns configuration pointing your alias to $whatever-$yourdomain.rhcloud.com.

### Spread the word
Liked using Lychee in openshift! Don't forget to spread the word by starring this repo.
