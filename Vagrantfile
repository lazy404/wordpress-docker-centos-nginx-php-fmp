Vagrant.configure(2) do |config|
  config.ssh.username="root"

  config.vm.define "centos-nginx-php" do |a|
    a.vm.provider "docker" do |d|
      d.name = "centos-nginx-php"
      d.build_dir = "."
      d.vagrant_vagrantfile = "./proxy/Vagrantfile.proxy"
      d.ports = ["80:80"]
      d.volumes = ["/vagrant/www/:/var/www:rw"]
    end
  end
end
