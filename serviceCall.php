	<?php
	#define SERVER_FIFO_NAME "/tmp/serv_fifo"
#define CLIENT_FIFO_NAME "/tmp/cli_%d_fifo"

#define BUFFER_SIZE 20

#struct data_to_pass_st {
  #  pid_t  client_pid;
    #char   some_data[BUFFER_SIZE - 1];

	$server_fifo_name = "/tmp/serv_fifo";
	$client_fifo_name = "/tmp/cli_1_fifo";
	$buffer_size = 20;
	$client_fifo;
	$data_read;
	#$server_fifo_fd, $client_fifo_fd, $times_to_send, $client_fifo;
	
    $server_fifo_fp = fopen($server_fifo_name, "a");
    if ($server_fifo_fp == FALSE) {
		echo "FAILED TO CONNECT TO SERVER PIPE";
        exit(FALSE);
    }
	
	echo "SUCCESSFULLY CONNECTED TO SERVER PIPE<br>";
	
    if (posix_mkfifo($client_fifo_name, 0777) == FALSE) {
		echo "FAILED TO CREATE CLIENT PIPE";
        exit(FALSE);
    }	
	
	echo "SUCCESSFULLY CREATED CLIENT PIPE<br>";
	

	$msgToSend = "Hello from client"; 
	if(fwrite( $server_fifo_fp, $msgToSend ) != FALSE)
	{	
		echo "SENT ".$msgToSend." TO SERVER<br>";
	}
    $client_fifo_fp = fopen($client_fifo_name, "r");
	if ($client_fifo_fp != FALSE) {
 		if ($data_read = fread($client_fifo_fp, $buffer_size) != FALSE) {
			echo "received:			".$data_read."<br>";
		} 
		fclose($client_fifo_fp);
	} 
	else
	{
		echo "FAILED TO OPEN CLIENT PIPE";
	} 
    
	
/* #include "client.h"
#include <ctype.h>

int main()
{
    int server_fifo_fd, client_fifo_fd;
    struct data_to_pass_st my_data;
    int times_to_send;
    char client_fifo[256];

    server_fifo_fd = open(SERVER_FIFO_NAME, O_WRONLY);
    if (server_fifo_fd == -1) {
        fprintf(stderr, "Sorry, no server\n");
        exit(EXIT_FAILURE);
    }

    my_data.client_pid = getpid();
    sprintf(client_fifo, CLIENT_FIFO_NAME, my_data.client_pid);
    if (mkfifo(client_fifo, 0777) == -1) {
        fprintf(stderr, "Sorry, can't make %s\n", client_fifo);
        exit(EXIT_FAILURE);
    }

// For each of the five loops, the client data is sent to the server.
// Then the client FIFO is opened (read-only, blocking mode) and the data read back.
// Finally, the server FIFO is closed and the client FIFO removed from memory.

    for (times_to_send = 0; times_to_send < 5; times_to_send++) {
        sprintf(my_data.some_data, "Hello from %d", my_data.client_pid); 
        printf("%d sent %s, ", my_data.client_pid, my_data.some_data);
        write(server_fifo_fd, &my_data, sizeof(my_data));
        client_fifo_fd = open(client_fifo, O_RDONLY);
        if (client_fifo_fd != -1) {
            if (read(client_fifo_fd, &my_data, sizeof(my_data)) > 0) {
                printf("received: %s\n", my_data.some_data);
            }
            close(client_fifo_fd);
        }
    }
    close(server_fifo_fd);
    unlink(client_fifo);
    exit(EXIT_SUCCESS);
}	 */
	
	?>	