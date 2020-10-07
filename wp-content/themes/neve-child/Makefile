SRC=style.scss
OBJ=style.css
OBJ_MIN=style.min.css

.PHONY: watch clean

all: $(OBJ) $(OBJ_MIN)

$(OBJ) $(OBJ).map: $(SRC)
	sass --style=nested $<:$@

$(OBJ_MIN) $(OBJ_MIN).map: $(SRC)
	sass --style=compressed $<:$@

watch-debug:
	sass --watch --style=nested $(SRC):$(OBJ)

watch:
	sass --watch --style=compressed $(SRC):$(OBJ_MIN)

clean:
	rm -f $(OBJ) $(OBJ).map $(OBJ_MIN) $(OBJ_MIN).map
