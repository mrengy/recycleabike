SRC=style.scss
OBJ_MIN=style.min.css

.PHONY: watch clean

all: $(OBJ_MIN)

$(OBJ_MIN) $(OBJ_MIN).map: $(SRC)
	sass --style=compressed $<:$@

watch:
	sass --watch --style=compressed $(SRC):$(OBJ_MIN)

clean:
	rm -f $(OBJ_MIN) $(OBJ_MIN).map
