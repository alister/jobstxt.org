set :application, "jobstxt.org"
set :repository,  "git@github.com:alister/jobstxt.org.git"

set :scm, :git
# Or: `accurev`, `bzr`, `cvs`, `darcs`, `git`, `mercurial`, `perforce`, `subversion` or `none`

role :web, "abulman.co.uk"                          # Your HTTP server, Apache/etc
#role :app, "your app-serv"                          # This may be the same as your `Web` server
#role :db,  "your primary db-server here", :primary => true # This is where Rails migrations will run
#role :db,  "your slave db-server here"

set :deploy_to, "/home/alister/web/jobstxt.org"  # CHANGE THIS LINE TO POINT TO THE CORRECT PATH
set :user, "alister"  # CHANGE THIS LINE TO USE YOUR OCS USERNAME
set :use_sudo, false
set :deploy_via,  :remote_cache
ssh_options[:forward_agent] = true
set :branch, "master"
set :git_enable_submodules, 1

# if you want to clean up old releases on each deploy uncomment this:
# after "deploy:restart", "deploy:cleanup"

# if you're still using the script/reaper helper you will need
# these http://github.com/rails/irs_process_scripts

# If you are using Passenger mod_rails uncomment this:
# namespace :deploy do
#   task :start do ; end
#   task :stop do ; end
#   task :restart, :roles => :app, :except => { :no_release => true } do
#     run "#{try_sudo} touch #{File.join(current_path,'tmp','restart.txt')}"
#   end
# end
