#include "client.h"
#include <ctype.h>

int main()
{
    int server_fifo_fd, client_fifo_fd;
    struct data_to_pass_st my_data;
    int read_res, i, j;
    char buffer[32];

	printf("strlen(buffer) = %d", strlen(buffer));
	
    mkfifo(SERVER_FIFO_NAME, 0777);
    server_fifo_fd = open(SERVER_FIFO_NAME, O_RDONLY);
    if (server_fifo_fd == -1) {
        fprintf(stderr, "Server fifo failure\n");
        exit(EXIT_FAILURE);
    }

	printf("server fifo open!\n");
	
    //sleep(10); /* lets clients queue for demo purposes */

    do {
        read_res = read(server_fifo_fd, buffer, sizeof(buffer));
        if (read_res > 0) {

		printf("got some data!\n");
		
// In this next stage, we perform some processing on the data just read from the client.
// We convert all the characters in some_data to uppercase and combine the CLIENT_FIFO_NAME
// with the received client_pid.
			
            for(i=0; i<strlen(buffer); i++) {
                buffer[i] = toupper(buffer[i]);
            }
			i++;
			buffer[i] = '\0';
			sleep(2);
			
			printf("%s received!\n", buffer);
			printf("strlen(buffer) = %d", strlen(buffer));
// Then we send the processed data back, opening the client pipe in write-only, blocking mode.
// Finally, we shut down the server FIFO by closing the file and then unlinking the FIFO.

            client_fifo_fd = open("/tmp/cli_1_fifo", O_WRONLY);
            if (client_fifo_fd != -1) {
                write(client_fifo_fd, buffer, strlen(buffer));
                close(client_fifo_fd);
            }
        }
    //} while (read_res > 0);
	} while (1);
    close(server_fifo_fd);
    unlink(SERVER_FIFO_NAME);
    exit(EXIT_SUCCESS);
}

