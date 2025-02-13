# Git 

## For new git repository

1)	Signup With Github   https://github.com/ 

2)	Login 
 
3)	Download git bash https://git-scm.com/downloads 

4)	Create Repository
 
5)	Upload data on Repository
	
On system, 

1) Open folder which you want to upload

2) Left click & open with git bash
 
`git init`

`git add . `

- If error then do as per error like ..

`git config --global --add safe.directory E:/xampp/htdocs/students/`

Again enter … 

`git add . `    : it creates one hidden folder .git 

`git status`   : check all status in green 

`git commit -m "first commit"`

- for user login to git

`git config --global user.name username`

`git config --global user.email user@email`

- connecting to the remote repository

`git remote add origin repo_address_from_git.git`

`git push origin master`

## For changes to existing repository

`git add .`

`git status`

`git commit -m 'updated'`

`git push origin master`

## For VS Code and other IDE

If want to open & work online server  open vs code

Open vs code

Terminal => new Terminal

`git add .`

`git status`

`git commit -m 'changed'`

`git push origin master`



