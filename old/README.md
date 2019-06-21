# tads-bd2191-registros
Registro de medico e de pacientes 



#Após modificações

git status   	(vai mostrar o estado das modificações)

git add .    	(adiciona as modificações)

git commit -a 	(descrever as modificações e dar commit)

git push 		(enviar o commit par ao servidor)


#Pegar modificações do servidor

git pull

#Primeiro acesso

mkdir workspace

cd workspace

git clone https://github.com/PeterNewTown/tads-bd2191-registros.git

cd tads-bd2191-registros



#Dependencias

sudo apt install python3-pip

pip3 install flask

#Executando o código

python3 app.py
