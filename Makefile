
run:
	docker-compose up

cleanDocker:
	docker stop $$(docker ps -aq)
	docker rm $$(docker ps -aq)
	docker rmi $$(docker images -q)
	docker network rm $$(docker network ls -q)
	docker volume rm $$(docker volume ls -q)


