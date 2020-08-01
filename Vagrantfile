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
  config.vm.network "private_network", ip: "192.168.200.150"
  config.vm.provision "shell", inline: <<-SHELL
    sed -i -e 's/#PermitRootLogin yes/PermitRootLogin yes/' /etc/ssh/sshd_config
    sed -i -e 's/PasswordAuthentication no/PasswordAuthentication yes/' /etc/ssh/sshd_config
    systemctl restart sshd
    echo "root:password" | chpasswd
    echo "vagrant:password" | chpasswd
    yum remove -y mariadb-libs
  SHELL
end
