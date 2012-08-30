from __future__ import with_statement
from fabric.api import *
from fabric.contrib.console import confirm

env.hosts = ['jack@178.79.144.193:33']

def deploy():
  for host in enumerate(env.hosts):
    with cd('/srv/www/be.ikhebhoop'):
      sudo("rm -rf public")
      sudo("rm -rf bundle")
    with cd('/srv/www/be.ikhebhoop/src'):
      sudo("git pull")
      sudo("meteor bundle ../dreams.tar.tgz")
    with cd('/srv/www/be.ikhebhoop'):
      sudo("tar -xf dreams.tar.tgz")
      sudo("rm -rf dreams.tar.tgz")
      sudo("mv bundle public")

      env.hosts.pop(0)
