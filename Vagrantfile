# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|
  # ベースのイメージを指定
  config.vm.box = "centos/7"
  config.vm.hostname = "handson-linux"
  config.vm.define "handson-linux"
  config.vm.provider :virtualbox do |vb|
    vb.name = "handson-linux"
  end
  # config.vm.provision "shell", inline: <<-SHELL
  #   apt-get update
  #   apt-get install -y apache2
  # SHELL
end
