## Intro

The project looks like a daily reminding, which helps me recall something sentences I ever read

I am very proud of developing this application using Laravel. 


## Environment

- Larevel framework 8.^
- Livewire 2.0
- Tailwind 2.0

## How to run 
 I am lasy to bulid a Nginx sever for running my Laravel application,therefore,just run the
  application with the Artisan Command on the terminal:
  
```
//then  service started
php artisan serve
```

next,it needs to run the command for email queue :
 
```
 php artisan queue:work --queue=emails
```
> The email queue will push the emails to user who is subscribed,if you want to run it in deamon
> mode,please using this command: nohup php artisan queue:work --queue=emails &

finally,we should run the command ：

    php artisan schedule:work
    
which means to publish the content of user has subscribed by the method of crontab,you may also
 run it in daemon mode,when it is used,you can quit the terminal.

## Preview

![dashborad.jpg](https://i.loli.net/2021/04/08/X8NIGwzPmi7fkOe.jpg)

![publish.jpg](https://i.loli.net/2021/04/08/9loWa7pDsc6SYxC.jpg)

![tags.jpg](https://i.loli.net/2021/04/08/K64H2ntIs5VZeNp.jpg)

![subs.jpg](https://i.loli.net/2021/04/08/fsNDS2cYIpWK8b1.jpg)

![edit.jpg](https://i.loli.net/2021/04/08/AH84N5yZREnQgPk.jpg)

![contents.jpg](https://i.loli.net/2021/04/08/G9OAR7mdTxgPajo.jpg)

