FROM centos
MAINTAINER fourleafclover
ENV workspace /var/www/project/FourLeafClover
WORKDIR ${workspace} 
ADD . $workspace
RUN  $workspace/bin/install.sh
EXPOSE 80
ENTRYPOINT ["$workspace/bin/start.sh"]
