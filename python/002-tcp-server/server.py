import socket


server_socket = socket.socket(socket.AF_INET, socket.SOCK_STREAM)

host = socket.gethostbyname()
port = 444

server_socket.bind((host, port))

server_socket.listen(3)  # max num of connections

while True:
    client_socket, address = server_socket.accept()

    print(f'Received connection from {address}')

    message = 'Thank you for connectoin to the server\r\n'
    client_socket.send(message.encode('ascii'))

    client_socket.close() 