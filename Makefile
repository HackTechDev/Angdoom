OBJS=main.o generate.o misc.o vectorize.o
BIN=angdoom

CFLAGS += -g

$(BIN): $(OBJS)
	gcc $(CFLAGS) -o $(BIN) $(OBJS) $(LIBS)

clean:
	rm -f $(BIN) $(OBJS)
