# CPTR220: Student Assignments Repository

Welcome to the Walla Walla University Web Application Development git repository for in-class exercises and homework assignments.

## Local Setup

Setting up your repository is a two-step process.
You must first fork your own version of the repository on the
WWU Computer Science GitLab server and then set up your environment
on the Cloud 9 web application.


### Forking the Repository
To create a fork of this repository, click on the *fork* button on the original repository at <https://gitlab.cs.wallawalla.edu/cptr220/student220>.
Copy the URL of your forked repository by clicking the clipboard icon next to it.
The URL should look something like: 

```
git@gitlab.cs.wallawalla.edu:YourUsername/student220.git
```

Once you have forked the repository, you must set its visibilty level to private so that only you can see it.
To do this, 
1. Click on the gear icon at the top right of the project page in GitLab.
2. Select *Edit Project* from the drop-down menu.
3. Set the *Visibility Level* to *Private* in the *Project settings* box.
4. Scroll down until you find the green *Save changes* button and click it.


### Setting Up Your Local Workspace
Create your local workspace by cloning the repository to your machine.
Put the repository in a place will remember.
You can clone the repository by using a command similar to this:

```
git clone git@gitlab.cs.wallawalla.edu:YourUsername/student220.git
```

If you are asked to enter a password, you need to set up your ssh key.

```
ssh-keygen
more ~/.ssh/id_rsa.pub
```

Copy the generated public key in to GitLab under your profile ssh keys


Finally, to make sure that you can receive updates easily (see below), type the 
following commands in the command window at the bottom of the Cloud 9 screen.

```
git remote add upstream git@gitlab.cs.wallawalla.edu:cptr220/student220.git
```

## Development and Deployment


### Local Development

To run web applications locally, you will need [VirtualBox](https://www.virtualbox.org/) and [Vagrant](https://www.vagrantup.com/).
Visit your local site by going to http://192.186.33.220/.
The IDE we are using for this class is [Microsoft Visual Studio Code](https://code.visualstudio.com/).
Many IDEs can be used this is a fairly good IDE and used by many web developers.
The STEM lab already has these software tools installed.

You can get the latest checkpoints and homework by running the following command:
```
./refresh.sh
```

Save your changes by pushing them to your repo using the following command:
```
./push.sh
```


### Production

The VM (and git) will be used to turn in your homework assignments.
First you will need to checkout your student220 git project into your home folder.
Then run the following commands to set the **webroot** to your repository.

* Set up your ssh key by using **ssh-keygen** and save teh public key in gitlab.
* Clone your forked student220 repository in your home directory
* Make your public folder accessable with these commands:
```
sudo rm -rf /var/www/html
sudo ln -fs /home/YourUsername/student220/public /var/www/html
```

For pushing your code to the production VM, you will need to ssh into your VM and do a git pull.

```
cd student220
git pull
```

Since you currently have a random password, it may be helpful to change your password with **passwd**.